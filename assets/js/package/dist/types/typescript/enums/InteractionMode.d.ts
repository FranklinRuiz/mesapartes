import { $Keys } from "../../utility-types/dist/index";
export declare const InteractionMode: {
    TEXT_HIGHLIGHTER: string;
    INK: string;
    INK_SIGNATURE: string;
    STAMP_PICKER: string;
    STAMP_CUSTOM: string;
    SHAPE_LINE: string;
    SHAPE_RECTANGLE: string;
    SHAPE_ELLIPSE: string;
    SHAPE_POLYGON: string;
    SHAPE_POLYLINE: string;
    INK_ERASER: string;
    NOTE: string;
    COMMENT_MARKER: string;
    TEXT: string;
    PAN: string;
    SEARCH: string;
    DOCUMENT_EDITOR: string;
    MARQUEE_ZOOM: string;
    REDACT_TEXT_HIGHLIGHTER: string;
    REDACT_SHAPE_RECTANGLE: string;
};
export declare type InteractionModeType = $Keys<typeof InteractionMode>;